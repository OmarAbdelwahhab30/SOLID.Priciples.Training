# Liskov Substitution Principle (Liskov Principle)

The Liskov Substitution Principle (Liskov Principle) is one of the five SOLID principles of object-oriented programming. It defines a set of rules that should be followed to ensure that subtypes (derived classes or subclasses) can be substituted for their base types (parent classes or superclasses) without affecting the correctness of the program.

## Rules of the Liskov Substitution Principle

1. **Behavioral Compatibility**: Subtypes must be compatible with their base types in terms of expected behavior. This means that a subtype should be able to perform all the actions (methods or functions) that are expected of its base type without changing the desired outcomes.

2. **Invariant Preservation**: Subtypes must maintain the invariants (properties or constraints) of their base types. Invariants are conditions or rules that should always hold true for instances of a class. Subtypes should not weaken or violate these invariants.

3. **Postconditions Strengthening**: Subtypes can strengthen the postconditions (the guarantees or results) of their base types. In other words, a subtype can provide more specific or stronger guarantees than its base type, but it should not weaken or contradict the base type's postconditions.

4. **Preconditions Weakening**: Subtypes can weaken the preconditions (the requirements or constraints) of their base types. This means that a subtype can relax the requirements for using a method or function compared to its base type. However, it should not impose stricter requirements.

5. **Exception Rules**: Subtypes should not throw exceptions that are not thrown by their base types, unless the exceptions are part of a broader exception hierarchy or are compatible with the base type's exceptions. In other words, the exception behavior of a subtype should not surprise or break code that expects the base type.

6. **Type Rules**: The type of a subtype should be a subtype of the type of its base. This ensures that the subtype can be used in any context where the base type is expected without violating type compatibility.

7. **History Constraint**: If a method or function in the base type uses historical data (e.g., maintaining a state history), the subtype should either maintain the same history or provide a compatible alternative.

8. **Covariant Return Types (in some languages)**: In languages that support covariant return types (such as C# or Java with generics), a subtype can return a more specific type than its base type, as long as it satisfies other Liskov Substitution Principle rules.

Adhering to these rules helps ensure that object-oriented code remains maintainable, extensible, and reliable when using inheritance and polymorphism. Violating these rules can lead to unexpected behavior and bugs in software systems.
